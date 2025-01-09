<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $Name
 * @property string $Description
 * @property 'NOOP'|'ARCHIVE' $Action
 * @property int<1, 100> $Rank
 * @property Shapes\FindingCriteria $FindingCriteria
 * @property string $ClientToken
 * @property array<string, string> $Tags
 */
class CreateFilterRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     Name: string,
     *     Description?: string,
     *     Action?: 'NOOP'|'ARCHIVE',
     *     Rank?: int<1, 100>,
     *     FindingCriteria: Shapes\FindingCriteria,
     *     ClientToken?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
