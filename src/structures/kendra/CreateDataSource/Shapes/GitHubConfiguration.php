<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SaaSConfiguration $SaaSConfiguration
 * @property OnPremiseConfiguration $OnPremiseConfiguration
 * @property 'SAAS'|'ON_PREMISE' $Type
 * @property string $SecretArn
 * @property bool $UseChangeLog
 * @property GitHubDocumentCrawlProperties $GitHubDocumentCrawlProperties
 * @property list<string> $RepositoryFilter
 * @property list<string> $InclusionFolderNamePatterns
 * @property list<string> $InclusionFileTypePatterns
 * @property list<string> $InclusionFileNamePatterns
 * @property list<string> $ExclusionFolderNamePatterns
 * @property list<string> $ExclusionFileTypePatterns
 * @property list<string> $ExclusionFileNamePatterns
 * @property DataSourceVpcConfiguration $VpcConfiguration
 * @property list<DataSourceToIndexFieldMapping> $GitHubRepositoryConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $GitHubCommitConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $GitHubIssueDocumentConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $GitHubIssueCommentConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $GitHubIssueAttachmentConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $GitHubPullRequestCommentConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $GitHubPullRequestDocumentConfigurationFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $GitHubPullRequestDocumentAttachmentConfigurationFieldMappings
 */
class GitHubConfiguration extends Shape
{
    /**
     * @param array{
     *     SaaSConfiguration?: SaaSConfiguration,
     *     OnPremiseConfiguration?: OnPremiseConfiguration,
     *     Type?: 'SAAS'|'ON_PREMISE',
     *     SecretArn: string,
     *     UseChangeLog?: bool,
     *     GitHubDocumentCrawlProperties?: GitHubDocumentCrawlProperties,
     *     RepositoryFilter?: list<string>,
     *     InclusionFolderNamePatterns?: list<string>,
     *     InclusionFileTypePatterns?: list<string>,
     *     InclusionFileNamePatterns?: list<string>,
     *     ExclusionFolderNamePatterns?: list<string>,
     *     ExclusionFileTypePatterns?: list<string>,
     *     ExclusionFileNamePatterns?: list<string>,
     *     VpcConfiguration?: DataSourceVpcConfiguration,
     *     GitHubRepositoryConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     GitHubCommitConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     GitHubIssueDocumentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     GitHubIssueCommentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     GitHubIssueAttachmentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     GitHubPullRequestCommentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     GitHubPullRequestDocumentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     GitHubPullRequestDocumentAttachmentConfigurationFieldMappings?: list<DataSourceToIndexFieldMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
