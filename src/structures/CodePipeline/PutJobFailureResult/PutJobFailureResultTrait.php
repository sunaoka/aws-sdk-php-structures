<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutJobFailureResult;

trait PutJobFailureResultTrait
{
    /**
     * @param PutJobFailureResultRequest $args
     * @return void
     */
    public function putJobFailureResult(PutJobFailureResultRequest $args)
    {
        parent::putJobFailureResult($args->toArray());
    }
}
