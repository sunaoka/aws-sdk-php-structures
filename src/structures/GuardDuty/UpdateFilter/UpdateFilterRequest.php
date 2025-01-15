<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $FilterName
 * @property string|null $Description
 * @property 'NOOP'|'ARCHIVE'|null $Action
 * @property int<1, 100>|null $Rank
 * @property Shapes\FindingCriteria|null $FindingCriteria
 */
class UpdateFilterRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FilterName: string,
     *     Description?: string|null,
     *     Action?: 'NOOP'|'ARCHIVE'|null,
     *     Rank?: int<1, 100>|null,
     *     FindingCriteria?: Shapes\FindingCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
