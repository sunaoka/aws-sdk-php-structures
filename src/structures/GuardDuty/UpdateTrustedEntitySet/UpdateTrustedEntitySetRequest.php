<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateTrustedEntitySet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $TrustedEntitySetId
 * @property string|null $Name
 * @property string|null $Location
 * @property string|null $ExpectedBucketOwner
 * @property bool|null $Activate
 */
class UpdateTrustedEntitySetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     TrustedEntitySetId: string,
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
