<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ImportApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $v1AppArn
 * @property string|null $policyArn
 * @property string|null $kmsKeyId
 * @property bool|null $skipManuallyAddedResources
 * @property list<Shapes\AssociatedSystem>|null $associatedSystems
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class ImportAppRequest extends Request
{
    /**
     * @param array{
     *     v1AppArn: string,
     *     policyArn?: string|null,
     *     kmsKeyId?: string|null,
     *     skipManuallyAddedResources?: bool|null,
     *     associatedSystems?: list<Shapes\AssociatedSystem>|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
