<?php

namespace Sunaoka\Aws\Structures\S3Control\PutJobTagging;

trait PutJobTaggingTrait
{
    /**
     * @param PutJobTaggingRequest $args
     * @return PutJobTaggingResponse
     */
    public function putJobTagging(PutJobTaggingRequest $args)
    {
        $result = parent::putJobTagging($args->toArray());
        return new PutJobTaggingResponse($result->toArray());
    }
}
