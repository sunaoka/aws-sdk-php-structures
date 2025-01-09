<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $FilterName
 * @property string $Description
 * @property 'NOOP'|'ARCHIVE' $Action
 * @property int $Rank
 * @property Shapes\FindingCriteria $FindingCriteria
 */
class UpdateFilterRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FilterName: string,
     *     Description?: string,
     *     Action?: 'NOOP'|'ARCHIVE',
     *     Rank?: int,
     *     FindingCriteria?: Shapes\FindingCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
