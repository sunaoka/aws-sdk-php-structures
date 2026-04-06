<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartTrainedModelInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accept
 * @property list<InferenceReceiverMember> $members
 */
class InferenceOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     accept?: string|null,
     *     members: list<InferenceReceiverMember>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
