<?php

namespace Sunaoka\Aws\Structures\HealthLake\CreateFHIRDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DatastoreName
 * @property 'R4' $DatastoreTypeVersion
 * @property Shapes\SseConfiguration|null $SseConfiguration
 * @property Shapes\PreloadDataConfig|null $PreloadDataConfig
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\IdentityProviderConfiguration|null $IdentityProviderConfiguration
 */
class CreateFHIRDatastoreRequest extends Request
{
    /**
     * @param array{
     *     DatastoreName?: string|null,
     *     DatastoreTypeVersion: 'R4',
     *     SseConfiguration?: Shapes\SseConfiguration|null,
     *     PreloadDataConfig?: Shapes\PreloadDataConfig|null,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     IdentityProviderConfiguration?: Shapes\IdentityProviderConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
