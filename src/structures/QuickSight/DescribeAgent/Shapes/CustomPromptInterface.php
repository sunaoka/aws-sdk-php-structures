<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelProfileId
 * @property string $SubscriptionId
 * @property string $QbsAwsAccountId
 * @property string|null $ResponseLength
 * @property string|null $OutputStyle
 * @property string|null $Identity
 * @property string|null $Tone
 * @property string|null $CustomInstructions
 * @property string|null $promptSummary
 */
class CustomPromptInterface extends Shape
{
    /**
     * @param array{
     *     ModelProfileId: string,
     *     SubscriptionId: string,
     *     QbsAwsAccountId: string,
     *     ResponseLength?: string|null,
     *     OutputStyle?: string|null,
     *     Identity?: string|null,
     *     Tone?: string|null,
     *     CustomInstructions?: string|null,
     *     promptSummary?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
