<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelProfileId
 * @property string $SubscriptionId
 * @property string $QbsAwsAccountId
 */
class CustomPromptProfile extends Shape
{
    /**
     * @param array{
     *     ModelProfileId: string,
     *     SubscriptionId: string,
     *     QbsAwsAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
