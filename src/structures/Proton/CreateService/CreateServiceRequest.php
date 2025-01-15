<?php

namespace Sunaoka\Aws\Structures\Proton\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $branchName
 * @property string|null $description
 * @property string $name
 * @property string|null $repositoryConnectionArn
 * @property string|null $repositoryId
 * @property string $spec
 * @property list<Shapes\Tag>|null $tags
 * @property string $templateMajorVersion
 * @property string|null $templateMinorVersion
 * @property string $templateName
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     branchName?: string|null,
     *     description?: string|null,
     *     name: string,
     *     repositoryConnectionArn?: string|null,
     *     repositoryId?: string|null,
     *     spec: string,
     *     tags?: list<Shapes\Tag>|null,
     *     templateMajorVersion: string,
     *     templateMinorVersion?: string|null,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
