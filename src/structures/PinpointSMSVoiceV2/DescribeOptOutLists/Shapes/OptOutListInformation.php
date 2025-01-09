<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptOutLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OptOutListArn
 * @property string $OptOutListName
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class OptOutListInformation extends Shape
{
    /**
     * @param array{
     *     OptOutListArn: string,
     *     OptOutListName: string,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
