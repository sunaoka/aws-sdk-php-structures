<?php

namespace Sunaoka\Aws\Structures\ECRPublic\PutRepositoryCatalogData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property list<string>|null $architectures
 * @property list<string>|null $operatingSystems
 * @property string|null $logoUrl
 * @property string|null $aboutText
 * @property string|null $usageText
 * @property bool|null $marketplaceCertified
 */
class RepositoryCatalogData extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     architectures?: list<string>|null,
     *     operatingSystems?: list<string>|null,
     *     logoUrl?: string|null,
     *     aboutText?: string|null,
     *     usageText?: string|null,
     *     marketplaceCertified?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
