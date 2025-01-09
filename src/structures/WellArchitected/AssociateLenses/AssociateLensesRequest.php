<?php

namespace Sunaoka\Aws\Structures\WellArchitected\AssociateLenses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property list<string> $LensAliases
 */
class AssociateLensesRequest extends Request
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
