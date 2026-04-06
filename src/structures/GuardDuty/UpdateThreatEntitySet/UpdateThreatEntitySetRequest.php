<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateThreatEntitySet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $ThreatEntitySetId
 * @property string|null $Name
 * @property string|null $Location
 * @property string|null $ExpectedBucketOwner
 * @property bool|null $Activate
 */
class UpdateThreatEntitySetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     ThreatEntitySetId: string,
     *     Name?: string|null,
     *     Location?: string|null,
     *     ExpectedBucketOwner?: string|null,
     *     Activate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
