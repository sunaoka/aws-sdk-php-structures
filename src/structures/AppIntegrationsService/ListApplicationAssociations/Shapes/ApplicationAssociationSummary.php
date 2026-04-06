<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListApplicationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationAssociationArn
 * @property string|null $ApplicationArn
 * @property string|null $ClientId
 */
class ApplicationAssociationSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationAssociationArn?: string|null,
     *     ApplicationArn?: string|null,
     *     ClientId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
