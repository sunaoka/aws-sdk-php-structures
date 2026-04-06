<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $transformerId
 * @property string|null $name
 * @property 'XML'|'JSON'|null $fileFormat
 * @property string|null $mappingTemplate
 * @property 'active'|'inactive'|null $status
 * @property Shapes\EdiType|null $ediType
 * @property string|null $sampleDocument
 */
class UpdateTransformerRequest extends Request
{
    /**
     * @param array{
     *     transformerId: string,
     *     name?: string|null,
     *     fileFormat?: 'XML'|'JSON'|null,
     *     mappingTemplate?: string|null,
     *     status?: 'active'|'inactive'|null,
     *     ediType?: Shapes\EdiType|null,
     *     sampleDocument?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
