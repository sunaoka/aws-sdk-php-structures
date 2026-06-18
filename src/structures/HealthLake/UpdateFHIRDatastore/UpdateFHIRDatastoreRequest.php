<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateFHIRDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatastoreId
 * @property string|null $DatastoreName
 * @property Shapes\NlpConfiguration|null $NlpConfiguration
 * @property Shapes\AnalyticsConfiguration|null $AnalyticsConfiguration
 * @property Shapes\ProfileConfiguration|null $ProfileConfiguration
 * @property Shapes\IdentityProviderConfiguration|null $IdentityProviderConfiguration
 */
class UpdateFHIRDatastoreRequest extends Request
{
    /**
     * @param array{
     *     DatastoreId: string,
     *     DatastoreName?: string|null,
     *     NlpConfiguration?: Shapes\NlpConfiguration|null,
     *     AnalyticsConfiguration?: Shapes\AnalyticsConfiguration|null,
     *     ProfileConfiguration?: Shapes\ProfileConfiguration|null,
     *     IdentityProviderConfiguration?: Shapes\IdentityProviderConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
