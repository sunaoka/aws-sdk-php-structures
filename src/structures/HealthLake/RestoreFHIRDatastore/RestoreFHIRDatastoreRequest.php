<?php

namespace Sunaoka\Aws\Structures\HealthLake\RestoreFHIRDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceDatastoreId
 * @property Shapes\RestoreConfiguration $RestoreConfiguration
 * @property string|null $DatastoreName
 * @property Shapes\SseConfiguration|null $SseConfiguration
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\IdentityProviderConfiguration|null $IdentityProviderConfiguration
 * @property Shapes\AnalyticsConfiguration|null $AnalyticsConfiguration
 * @property Shapes\NlpConfiguration|null $NlpConfiguration
 * @property Shapes\ProfileConfiguration|null $ProfileConfiguration
 */
class RestoreFHIRDatastoreRequest extends Request
{
    /**
     * @param array{
     *     SourceDatastoreId: string,
     *     RestoreConfiguration: Shapes\RestoreConfiguration,
     *     DatastoreName?: string|null,
     *     SseConfiguration?: Shapes\SseConfiguration|null,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     IdentityProviderConfiguration?: Shapes\IdentityProviderConfiguration|null,
     *     AnalyticsConfiguration?: Shapes\AnalyticsConfiguration|null,
     *     NlpConfiguration?: Shapes\NlpConfiguration|null,
     *     ProfileConfiguration?: Shapes\ProfileConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
