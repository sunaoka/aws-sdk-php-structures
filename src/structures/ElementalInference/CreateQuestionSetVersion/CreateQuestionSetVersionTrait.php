<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateQuestionSetVersion;

trait CreateQuestionSetVersionTrait
{
    /**
     * @param CreateQuestionSetVersionRequest $args
     * @return CreateQuestionSetVersionResponse
     */
    public function createQuestionSetVersion(CreateQuestionSetVersionRequest $args)
    {
        $result = parent::createQuestionSetVersion($args->toArray());
        return new CreateQuestionSetVersionResponse($result->toArray());
    }
}
