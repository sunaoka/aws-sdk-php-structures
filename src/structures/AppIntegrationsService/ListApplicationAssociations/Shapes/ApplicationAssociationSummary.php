<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListApplicationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationAssociationArn
 * @property string $ApplicationArn
 * @property string $ClientId
 */
class ApplicationAssociationSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationAssociationArn?: string,
     *     ApplicationArn?: string,
     *     ClientId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
