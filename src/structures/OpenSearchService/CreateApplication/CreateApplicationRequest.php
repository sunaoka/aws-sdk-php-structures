<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $name
 * @property list<Shapes\DataSource> $dataSources
 * @property Shapes\IamIdentityCenterOptionsInput $iamIdentityCenterOptions
 * @property list<Shapes\AppConfig> $appConfigs
 * @property list<Shapes\Tag> $tagList
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     name: string,
     *     dataSources?: list<Shapes\DataSource>,
     *     iamIdentityCenterOptions?: Shapes\IamIdentityCenterOptionsInput,
     *     appConfigs?: list<Shapes\AppConfig>,
     *     tagList?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
