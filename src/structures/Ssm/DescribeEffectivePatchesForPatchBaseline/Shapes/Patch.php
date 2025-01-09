<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectivePatchesForPatchBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $ReleaseDate
 * @property string $Title
 * @property string $Description
 * @property string $ContentUrl
 * @property string $Vendor
 * @property string $ProductFamily
 * @property string $Product
 * @property string $Classification
 * @property string $MsrcSeverity
 * @property string $KbNumber
 * @property string $MsrcNumber
 * @property string $Language
 * @property list<string> $AdvisoryIds
 * @property list<string> $BugzillaIds
 * @property list<string> $CVEIds
 * @property string $Name
 * @property int $Epoch
 * @property string $Version
 * @property string $Release
 * @property string $Arch
 * @property string $Severity
 * @property string $Repository
 */
class Patch extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ReleaseDate?: \Aws\Api\DateTimeResult,
     *     Title?: string,
     *     Description?: string,
     *     ContentUrl?: string,
     *     Vendor?: string,
     *     ProductFamily?: string,
     *     Product?: string,
     *     Classification?: string,
     *     MsrcSeverity?: string,
     *     KbNumber?: string,
     *     MsrcNumber?: string,
     *     Language?: string,
     *     AdvisoryIds?: list<string>,
     *     BugzillaIds?: list<string>,
     *     CVEIds?: list<string>,
     *     Name?: string,
     *     Epoch?: int,
     *     Version?: string,
     *     Release?: string,
     *     Arch?: string,
     *     Severity?: string,
     *     Repository?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
