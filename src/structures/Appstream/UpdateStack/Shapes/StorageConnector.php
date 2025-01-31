<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOMEFOLDERS'|'GOOGLE_DRIVE'|'ONE_DRIVE' $ConnectorType
 * @property string|null $ResourceIdentifier
 * @property list<string>|null $Domains
 * @property list<string>|null $DomainsRequireAdminConsent
 */
class StorageConnector extends Shape
{
    /**
     * @param array{
     *     ConnectorType: 'HOMEFOLDERS'|'GOOGLE_DRIVE'|'ONE_DRIVE',
     *     ResourceIdentifier?: string|null,
     *     Domains?: list<string>|null,
     *     DomainsRequireAdminConsent?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
