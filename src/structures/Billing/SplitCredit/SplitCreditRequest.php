<?php

namespace Sunaoka\Aws\Structures\Billing\SplitCredit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $creditId
 * @property list<Shapes\SplitPortion> $portions
 * @property string|null $clientToken
 * @property bool|null $dryRun
 */
class SplitCreditRequest extends Request
{
    /**
     * @param array{
     *     creditId: string,
     *     portions: list<Shapes\SplitPortion>,
     *     clientToken?: string|null,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
