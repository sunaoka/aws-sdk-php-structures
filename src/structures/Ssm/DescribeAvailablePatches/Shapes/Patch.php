<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAvailablePatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $ReleaseDate
 * @property string|null $Title
 * @property string|null $Description
 * @property string|null $ContentUrl
 * @property string|null $Vendor
 * @property string|null $ProductFamily
 * @property string|null $Product
 * @property string|null $Classification
 * @property string|null $MsrcSeverity
 * @property string|null $KbNumber
 * @property string|null $MsrcNumber
 * @property string|null $Language
 * @property list<string>|null $AdvisoryIds
 * @property list<string>|null $BugzillaIds
 * @property list<string>|null $CVEIds
 * @property string|null $Name
 * @property int|null $Epoch
 * @property string|null $Version
 * @property string|null $Release
 * @property string|null $Arch
 * @property string|null $Severity
 * @property string|null $Repository
 */
class Patch extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ReleaseDate?: \Aws\Api\DateTimeResult|null,
     *     Title?: string|null,
     *     Description?: string|null,
     *     ContentUrl?: string|null,
     *     Vendor?: string|null,
     *     ProductFamily?: string|null,
     *     Product?: string|null,
     *     Classification?: string|null,
     *     MsrcSeverity?: string|null,
     *     KbNumber?: string|null,
     *     MsrcNumber?: string|null,
     *     Language?: string|null,
     *     AdvisoryIds?: list<string>|null,
     *     BugzillaIds?: list<string>|null,
     *     CVEIds?: list<string>|null,
     *     Name?: string|null,
     *     Epoch?: int|null,
     *     Version?: string|null,
     *     Release?: string|null,
     *     Arch?: string|null,
     *     Severity?: string|null,
     *     Repository?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
