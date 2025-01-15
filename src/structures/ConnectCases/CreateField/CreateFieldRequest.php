<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateField;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainId
 * @property string $name
 * @property 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User' $type
 */
class CreateFieldRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainId: string,
     *     name: string,
     *     type: 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
