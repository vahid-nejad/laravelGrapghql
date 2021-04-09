<?php

namespace App\GraphQL\Mutations;

class UploadFile
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $file = $args['file'];

        return $file->storePublicly('uploads');
    }
}
