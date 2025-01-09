<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $displayName
 * @property string $description
 * @property 'ENTERPRISE'|'STARTER' $type
 * @property list<Shapes\Tag> $tags
 * @property Shapes\IndexCapacityConfiguration $capacityConfiguration
 * @property string $clientToken
 */
class CreateIndexRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     displayName: string,
     *     description?: string,
     *     type?: 'ENTERPRISE'|'STARTER',
     *     tags?: list<Shapes\Tag>,
     *     capacityConfiguration?: Shapes\IndexCapacityConfiguration,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
