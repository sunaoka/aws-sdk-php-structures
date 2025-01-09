<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartTrainedModelInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accept
 * @property list<InferenceReceiverMember> $members
 */
class InferenceOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     accept?: string,
     *     members: list<InferenceReceiverMember>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
