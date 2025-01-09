<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFreeTrialInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property list<FreeTrialInfo> $freeTrialInfo
 */
class FreeTrialAccountInfo extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     freeTrialInfo: list<FreeTrialInfo>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
