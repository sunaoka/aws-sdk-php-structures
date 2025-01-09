<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $FilterName
 * @property string $Description
 * @property 'NOOP'|'ARCHIVE' $Action
 * @property int<1, 100> $Rank
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
     *     Rank?: int<1, 100>,
     *     FindingCriteria?: Shapes\FindingCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
