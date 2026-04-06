<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateResolverType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property 'AWS'|'Self' $resolverType
 */
class UpdateResolverTypeRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     resolverType: 'AWS'|'Self'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
