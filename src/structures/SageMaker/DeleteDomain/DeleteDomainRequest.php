<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property Shapes\RetentionPolicy $RetentionPolicy
 */
class DeleteDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     RetentionPolicy?: Shapes\RetentionPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
