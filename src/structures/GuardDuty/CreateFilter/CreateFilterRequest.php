<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $Name
 * @property string|null $Description
 * @property 'NOOP'|'ARCHIVE'|null $Action
 * @property int<1, 100>|null $Rank
 * @property Shapes\FindingCriteria $FindingCriteria
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateFilterRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     Name: string,
     *     Description?: string|null,
     *     Action?: 'NOOP'|'ARCHIVE'|null,
     *     Rank?: int<1, 100>|null,
     *     FindingCriteria: Shapes\FindingCriteria,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
