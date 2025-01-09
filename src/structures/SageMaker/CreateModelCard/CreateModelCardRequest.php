<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelCard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelCardName
 * @property Shapes\ModelCardSecurityConfig $SecurityConfig
 * @property string $Content
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived' $ModelCardStatus
 * @property list<Shapes\Tag> $Tags
 */
class CreateModelCardRequest extends Request
{
    /**
     * @param array{
     *     ModelCardName: string,
     *     SecurityConfig?: Shapes\ModelCardSecurityConfig,
     *     Content: string,
     *     ModelCardStatus: 'Draft'|'PendingReview'|'Approved'|'Archived',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
