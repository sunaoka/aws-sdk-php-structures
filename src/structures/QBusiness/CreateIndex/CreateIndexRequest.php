<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $displayName
 * @property string|null $description
 * @property 'ENTERPRISE'|'STARTER'|null $type
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\IndexCapacityConfiguration|null $capacityConfiguration
 * @property string|null $clientToken
 */
class CreateIndexRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     displayName: string,
     *     description?: string|null,
     *     type?: 'ENTERPRISE'|'STARTER'|null,
     *     tags?: list<Shapes\Tag>|null,
     *     capacityConfiguration?: Shapes\IndexCapacityConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
