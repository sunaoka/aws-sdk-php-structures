<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExposuresByRemediationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $Region
 * @property string|null $ResourceOwnerAccountId
 * @property string|null $ResourceOwnerOrgId
 * @property string $Type
 * @property string|null $Name
 * @property string $Id
 * @property string|null $ResourceGuid
 * @property string $ResourceRegion
 * @property 'Azure'|'AWS' $CloudProvider
 */
class RemediationResource extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     Region: string,
     *     ResourceOwnerAccountId?: string|null,
     *     ResourceOwnerOrgId?: string|null,
     *     Type: string,
     *     Name?: string|null,
     *     Id: string,
     *     ResourceGuid?: string|null,
     *     ResourceRegion: string,
     *     CloudProvider: 'Azure'|'AWS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
