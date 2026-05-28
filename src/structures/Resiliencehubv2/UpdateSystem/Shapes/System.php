<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $systemArn
 * @property string $systemId
 * @property string $name
 * @property string|null $description
 * @property bool|null $sharingEnabled
 * @property array<string, string>|null $tags
 * @property string|null $kmsKeyId
 * @property string|null $organizationId
 * @property string|null $ouId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class System extends Shape
{
    /**
     * @param array{
     *     systemArn: string,
     *     systemId: string,
     *     name: string,
     *     description?: string|null,
     *     sharingEnabled?: bool|null,
     *     tags?: array<string, string>|null,
     *     kmsKeyId?: string|null,
     *     organizationId?: string|null,
     *     ouId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
