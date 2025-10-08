<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew;

class GlueDataBrewClient extends \Aws\GlueDataBrew\GlueDataBrewClient
{
    use BatchDeleteRecipeVersion\BatchDeleteRecipeVersionTrait;
    use CreateDataset\CreateDatasetTrait;
    use CreateProfileJob\CreateProfileJobTrait;
    use CreateProject\CreateProjectTrait;
    use CreateRecipe\CreateRecipeTrait;
    use CreateRecipeJob\CreateRecipeJobTrait;
    use CreateRuleset\CreateRulesetTrait;
    use CreateSchedule\CreateScheduleTrait;
    use DeleteDataset\DeleteDatasetTrait;
    use DeleteJob\DeleteJobTrait;
    use DeleteProject\DeleteProjectTrait;
    use DeleteRecipeVersion\DeleteRecipeVersionTrait;
    use DeleteRuleset\DeleteRulesetTrait;
    use DeleteSchedule\DeleteScheduleTrait;
    use DescribeDataset\DescribeDatasetTrait;
    use DescribeJob\DescribeJobTrait;
    use DescribeJobRun\DescribeJobRunTrait;
    use DescribeProject\DescribeProjectTrait;
    use DescribeRecipe\DescribeRecipeTrait;
    use DescribeRuleset\DescribeRulesetTrait;
    use DescribeSchedule\DescribeScheduleTrait;
    use ListDatasets\ListDatasetsTrait;
    use ListJobRuns\ListJobRunsTrait;
    use ListJobs\ListJobsTrait;
    use ListProjects\ListProjectsTrait;
    use ListRecipeVersions\ListRecipeVersionsTrait;
    use ListRecipes\ListRecipesTrait;
    use ListRulesets\ListRulesetsTrait;
    use ListSchedules\ListSchedulesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PublishRecipe\PublishRecipeTrait;
    use SendProjectSessionAction\SendProjectSessionActionTrait;
    use StartJobRun\StartJobRunTrait;
    use StartProjectSession\StartProjectSessionTrait;
    use StopJobRun\StopJobRunTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDataset\UpdateDatasetTrait;
    use UpdateProfileJob\UpdateProfileJobTrait;
    use UpdateProject\UpdateProjectTrait;
    use UpdateRecipe\UpdateRecipeTrait;
    use UpdateRecipeJob\UpdateRecipeJobTrait;
    use UpdateRuleset\UpdateRulesetTrait;
    use UpdateSchedule\UpdateScheduleTrait;
}
