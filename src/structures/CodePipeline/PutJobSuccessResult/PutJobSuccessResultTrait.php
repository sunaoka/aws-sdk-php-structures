<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutJobSuccessResult;

trait PutJobSuccessResultTrait
{
    /**
     * @param PutJobSuccessResultRequest $args
     * @return void
     */
    public function putJobSuccessResult(PutJobSuccessResultRequest $args)
    {
        parent::putJobSuccessResult($args->toArray());
    }
}
