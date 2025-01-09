<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOMEFOLDERS'|'GOOGLE_DRIVE'|'ONE_DRIVE' $ConnectorType
 * @property string $ResourceIdentifier
 * @property list<string> $Domains
 */
class StorageConnector extends Shape
{
    /**
     * @param array{
     *     ConnectorType: 'HOMEFOLDERS'|'GOOGLE_DRIVE'|'ONE_DRIVE',
     *     ResourceIdentifier?: string,
     *     Domains?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
