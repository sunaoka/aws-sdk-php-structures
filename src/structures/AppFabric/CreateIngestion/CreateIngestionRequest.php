<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateIngestion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $app
 * @property string $tenantId
 * @property 'auditLog' $ingestionType
 * @property string $clientToken
 * @property list<Shapes\Tag> $tags
 */
class CreateIngestionRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     app: string,
     *     tenantId: string,
     *     ingestionType: 'auditLog',
     *     clientToken?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
