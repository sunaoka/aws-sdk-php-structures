<?php

namespace Sunaoka\Aws\Structures\HealthLake\PublishDataTransformationProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property 'CCDA'|'CSV' $SourceFormat
 * @property int<0, 99>|null $FromExistingVersion
 * @property string|null $ChangeDescription
 */
class PublishDataTransformationProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     SourceFormat: 'CCDA'|'CSV',
     *     FromExistingVersion?: int<0, 99>|null,
     *     ChangeDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
