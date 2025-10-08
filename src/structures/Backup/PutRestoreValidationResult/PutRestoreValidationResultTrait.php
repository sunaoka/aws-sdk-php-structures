<?php

namespace Sunaoka\Aws\Structures\Backup\PutRestoreValidationResult;

trait PutRestoreValidationResultTrait
{
    /**
     * @param PutRestoreValidationResultRequest $args
     * @return void
     */
    public function putRestoreValidationResult(PutRestoreValidationResultRequest $args)
    {
        parent::putRestoreValidationResult($args->toArray());
    }
}
