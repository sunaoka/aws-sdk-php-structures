<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateIngestion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $app
 * @property string $tenantId
 * @property 'auditLog' $ingestionType
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateIngestionRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     app: string,
     *     tenantId: string,
     *     ingestionType: 'auditLog',
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
