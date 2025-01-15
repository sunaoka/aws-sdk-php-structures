<?php

namespace Sunaoka\Aws\Structures\ECRPublic\CreateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property list<string>|null $architectures
 * @property list<string>|null $operatingSystems
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $logoImageBlob
 * @property string|null $aboutText
 * @property string|null $usageText
 */
class RepositoryCatalogDataInput extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     architectures?: list<string>|null,
     *     operatingSystems?: list<string>|null,
     *     logoImageBlob?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     aboutText?: string|null,
     *     usageText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
