<?php

namespace Sunaoka\Aws\Structures\Braket\UpdateSpendingLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spendingLimitArn
 * @property string $clientToken
 * @property string|null $spendingLimit
 * @property Shapes\TimePeriod|null $timePeriod
 */
class UpdateSpendingLimitRequest extends Request
{
    /**
     * @param array{
     *     spendingLimitArn: string,
     *     clientToken: string,
     *     spendingLimit?: string|null,
     *     timePeriod?: Shapes\TimePeriod|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
