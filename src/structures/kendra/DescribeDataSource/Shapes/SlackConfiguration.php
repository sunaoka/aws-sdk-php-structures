<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TeamId
 * @property string $SecretArn
 * @property DataSourceVpcConfiguration|null $VpcConfiguration
 * @property list<'PUBLIC_CHANNEL'|'PRIVATE_CHANNEL'|'GROUP_MESSAGE'|'DIRECT_MESSAGE'> $SlackEntityList
 * @property bool|null $UseChangeLog
 * @property bool|null $CrawlBotMessage
 * @property bool|null $ExcludeArchived
 * @property string $SinceCrawlDate
 * @property int<0, 168>|null $LookBackPeriod
 * @property list<string>|null $PrivateChannelFilter
 * @property list<string>|null $PublicChannelFilter
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 */
class SlackConfiguration extends Shape
{
    /**
     * @param array{
     *     TeamId: string,
     *     SecretArn: string,
     *     VpcConfiguration?: DataSourceVpcConfiguration|null,
     *     SlackEntityList: list<'PUBLIC_CHANNEL'|'PRIVATE_CHANNEL'|'GROUP_MESSAGE'|'DIRECT_MESSAGE'>,
     *     UseChangeLog?: bool|null,
     *     CrawlBotMessage?: bool|null,
     *     ExcludeArchived?: bool|null,
     *     SinceCrawlDate: string,
     *     LookBackPeriod?: int<0, 168>|null,
     *     PrivateChannelFilter?: list<string>|null,
     *     PublicChannelFilter?: list<string>|null,
     *     InclusionPatterns?: list<string>|null,
     *     ExclusionPatterns?: list<string>|null,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
