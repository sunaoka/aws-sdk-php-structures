<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateField;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $name
 * @property 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User' $type
 * @property string|null $description
 */
class CreateFieldRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     name: string,
     *     type: 'Text'|'Number'|'Boolean'|'DateTime'|'SingleSelect'|'Url'|'User',
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
