<?php

namespace Sunaoka\Aws\Structures\Braket\CreateSpendingLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $deviceArn
 * @property string $spendingLimit
 * @property Shapes\TimePeriod|null $timePeriod
 * @property array<string, string>|null $tags
 */
class CreateSpendingLimitRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     deviceArn: string,
     *     spendingLimit: string,
     *     timePeriod?: Shapes\TimePeriod|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
