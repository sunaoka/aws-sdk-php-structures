<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DisassociateLenses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property list<string> $LensAliases
 */
class DisassociateLensesRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     LensAliases: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
