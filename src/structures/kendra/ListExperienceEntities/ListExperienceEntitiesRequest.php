<?php

namespace Sunaoka\Aws\Structures\kendra\ListExperienceEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $IndexId
 * @property string $NextToken
 */
class ListExperienceEntitiesRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     IndexId: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
