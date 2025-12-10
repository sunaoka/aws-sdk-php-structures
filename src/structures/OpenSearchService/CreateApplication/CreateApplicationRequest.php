<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property list<Shapes\DataSource>|null $dataSources
 * @property Shapes\IamIdentityCenterOptionsInput|null $iamIdentityCenterOptions
 * @property list<Shapes\AppConfig>|null $appConfigs
 * @property list<Shapes\Tag>|null $tagList
 * @property string|null $kmsKeyArn
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     dataSources?: list<Shapes\DataSource>|null,
     *     iamIdentityCenterOptions?: Shapes\IamIdentityCenterOptionsInput|null,
     *     appConfigs?: list<Shapes\AppConfig>|null,
     *     tagList?: list<Shapes\Tag>|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
