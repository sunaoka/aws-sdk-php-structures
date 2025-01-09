<?php

namespace Sunaoka\Aws\Structures\Proton\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $branchName
 * @property string $description
 * @property string $name
 * @property string $repositoryConnectionArn
 * @property string $repositoryId
 * @property string $spec
 * @property list<Shapes\Tag> $tags
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 * @property string $templateName
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     branchName?: string,
     *     description?: string,
     *     name: string,
     *     repositoryConnectionArn?: string,
     *     repositoryId?: string,
     *     spec: string,
     *     tags?: list<Shapes\Tag>,
     *     templateMajorVersion: string,
     *     templateMinorVersion?: string,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
