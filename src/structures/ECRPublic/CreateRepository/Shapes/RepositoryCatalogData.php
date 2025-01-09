<?php

namespace Sunaoka\Aws\Structures\ECRPublic\CreateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property list<string> $architectures
 * @property list<string> $operatingSystems
 * @property string $logoUrl
 * @property string $aboutText
 * @property string $usageText
 * @property bool $marketplaceCertified
 */
class RepositoryCatalogData extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     architectures?: list<string>,
     *     operatingSystems?: list<string>,
     *     logoUrl?: string,
     *     aboutText?: string,
     *     usageText?: string,
     *     marketplaceCertified?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
