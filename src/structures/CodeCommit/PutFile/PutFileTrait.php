<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PutFile;

trait PutFileTrait
{
    /**
     * @param PutFileRequest $args
     * @return PutFileResponse
     */
    public function putFile(PutFileRequest $args)
    {
        $result = parent::putFile($args->toArray());
        return new PutFileResponse($result->toArray());
    }
}
