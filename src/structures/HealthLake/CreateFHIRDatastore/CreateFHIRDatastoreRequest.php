<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateFHIRDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatastoreName
 * @property 'R4' $DatastoreTypeVersion
 * @property Shapes\SseConfiguration $SseConfiguration
 * @property Shapes\PreloadDataConfig $PreloadDataConfig
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\IdentityProviderConfiguration $IdentityProviderConfiguration
 */
class CreateFHIRDatastoreRequest extends Request
{
    /**
     * @param array{
     *     DatastoreName?: string,
     *     DatastoreTypeVersion: 'R4',
     *     SseConfiguration?: Shapes\SseConfiguration,
     *     PreloadDataConfig?: Shapes\PreloadDataConfig,
     *     ClientToken?: string,
     *     Tags?: list<Shapes\Tag>,
     *     IdentityProviderConfiguration?: Shapes\IdentityProviderConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
