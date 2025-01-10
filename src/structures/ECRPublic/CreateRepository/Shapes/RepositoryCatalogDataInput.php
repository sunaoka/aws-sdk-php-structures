<?php

namespace Sunaoka\Aws\Structures\ECRPublic\CreateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property list<string> $architectures
 * @property list<string> $operatingSystems
 * @property string|resource|\Psr\Http\Message\StreamInterface $logoImageBlob
 * @property string $aboutText
 * @property string $usageText
 */
class RepositoryCatalogDataInput extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     architectures?: list<string>,
     *     operatingSystems?: list<string>,
     *     logoImageBlob?: string|resource|\Psr\Http\Message\StreamInterface,
     *     aboutText?: string,
     *     usageText?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
