<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'XML'|'JSON' $fileFormat
 * @property string $mappingTemplate
 * @property Shapes\EdiType $ediType
 * @property string|null $sampleDocument
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateTransformerRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     fileFormat: 'XML'|'JSON',
     *     mappingTemplate: string,
     *     ediType: Shapes\EdiType,
     *     sampleDocument?: string|null,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
